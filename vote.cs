using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Osis
{
    #region Vote
    public class Vote
    {
        #region Member Variables
        protected int _id;
        protected int _vote;
        protected unknown _timestamp;
        #endregion
        #region Constructors
        public Vote() { }
        public Vote(int vote, unknown timestamp)
        {
            this._vote=vote;
            this._timestamp=timestamp;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual int Vote
        {
            get {return _vote;}
            set {_vote=value;}
        }
        public virtual unknown Timestamp
        {
            get {return _timestamp;}
            set {_timestamp=value;}
        }
        #endregion
    }
    #endregion
}