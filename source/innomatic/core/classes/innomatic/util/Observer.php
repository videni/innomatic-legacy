<?php
/**
 * Innomatic
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.
 *
 * @copyright  1999-2014 Innoteam Srl
 * @license    http://www.innomaticplatform.com/license/   BSD License
 * @link       http://www.innomaticplatform.com
 * @since      Class available since Release 5.0
*/
namespace Innomatic\Util;

/**
 * Classes that implement the Observer interface get notified when
 * observable object change.
 */
interface Observer
{
    /**
     * This method is called whenever an observable object changes.
     *
     * @return void
     */
    public function update($observable, $arg = '');
}
