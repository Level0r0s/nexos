<?php
/*
  +-------------------------------------------------------------------+
  | NexOS CMS by Myndworx Asylum Software                             |
  |      Copyright © 2009 - 20013 by Myndworx Asylum                  |
  | NexOS CMS is released under the terms and conditions of the GNU   |
  | GPL V2 or higher.                                                 |
  +-------------------------------------------------------------------+
  | block-Sample.php - Example NexOS block file                       |
  | Authors:                                                          |
  |  Steven Sheeley                                                   |
  |  Richard R. Pufky                                                 |
  |      and the Myndworx Asylum Dev Team                             |
  | eMail: support at myndworx dot com                                |
  | Website: http://www.nexoscms.org and http://www.myndworx.com      |
  +-------------------------------------------------------------------+
  |Original Copyright below                                           |
  +-------------------------------------------------------------------+
 */
/*
 *  $Id$
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS
 * "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT
 * LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR
 * A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT
 * OWNER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL,
 * SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT
 * LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY
 * THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
 * (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE
 * OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
 *
 * This software consists of voluntary contributions made by many individuals
 * and is licensed under the LGPL. For more information, see
 * <http://www.doctrine-project.org>.
 */

namespace Doctrine\Common;

use Doctrine\Common\Events\Event;

/**
 * The EventManager is the central point of Doctrine's event listener system.
 * Listeners are registered on the manager and events are dispatched through the
 * manager.
 * 
 * @license http://www.opensource.org/licenses/lgpl-license.php LGPL
 * @link    www.doctrine-project.org
 * @since   2.0
 * @version $Revision: 3938 $
 * @author  Guilherme Blanco <guilhermeblanco@hotmail.com>
 * @author  Jonathan Wage <jonwage@gmail.com>
 * @author  Roman Borschel <roman@code-factory.org>
 */
class EventManager
{
    /**
     * Map of registered listeners.
     * <event> => <listeners> 
     *
     * @var array
     */
    private $_listeners = array();

    /**
     * Dispatches an event to all registered listeners.
     *
     * @param string $eventName The name of the event to dispatch. The name of the event is
     *                          the name of the method that is invoked on listeners.
     * @param EventArgs $eventArgs The event arguments to pass to the event handlers/listeners.
     *                             If not supplied, the single empty EventArgs instance is used.
     * @return boolean
     */
    public function dispatchEvent($eventName, EventArgs $eventArgs = null)
    {
        if (isset($this->_listeners[$eventName])) {
            $eventArgs = $eventArgs === null ? EventArgs::getEmptyInstance() : $eventArgs;
            
            foreach ($this->_listeners[$eventName] as $listener) {
                $listener->$eventName($eventArgs);
            }
        }
    }

    /**
     * Gets the listeners of a specific event or all listeners.
     *
     * @param string $event The name of the event.
     * @return array The event listeners for the specified event, or all event listeners.
     */
    public function getListeners($event = null)
    {
        return $event ? $this->_listeners[$event] : $this->_listeners;
    }

    /**
     * Checks whether an event has any registered listeners.
     *
     * @param string $event
     * @return boolean TRUE if the specified event has any listeners, FALSE otherwise.
     */
    public function hasListeners($event)
    {
        return isset($this->_listeners[$event]) && $this->_listeners[$event];
    }

    /**
     * Adds an event listener that listens on the specified events.
     *
     * @param string|array $events The event(s) to listen on.
     * @param object $listener The listener object.
     */
    public function addEventListener($events, $listener)
    {
        // Picks the hash code related to that listener
        $hash = spl_object_hash($listener);
        
        foreach ((array) $events as $event) {
            // Overrides listener if a previous one was associated already
            // Prevents duplicate listeners on same event (same instance only)
            $this->_listeners[$event][$hash] = $listener;
        }
    }
    
    /**
     * Removes an event listener from the specified events.
     *
     * @param string|array $events
     * @param object $listener
     */
    public function removeEventListener($events, $listener)
    {
        // Picks the hash code related to that listener
        $hash = spl_object_hash($listener);
        
        foreach ((array) $events as $event) {
            // Check if actually have this listener associated
            if (isset($this->_listeners[$event][$hash])) {
                unset($this->_listeners[$event][$hash]);
            }
        }
    }
    
    /**
     * Adds an EventSubscriber. The subscriber is asked for all the events he is
     * interested in and added as a listener for these events.
     * 
     * @param Doctrine\Common\EventSubscriber $subscriber The subscriber.
     */
    public function addEventSubscriber(EventSubscriber $subscriber)
    {
        $this->addEventListener($subscriber->getSubscribedEvents(), $subscriber);
    }
}