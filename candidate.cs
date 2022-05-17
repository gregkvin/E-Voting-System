using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Osis
{
    #region Candidate
    public class Candidate
    {
        #region Member Variables
        protected int _cid;
        protected string _name;
        protected string _class;
        protected string _photo;
        protected string _description;
        protected string _nickname;
        protected int _total;
        #endregion
        #region Constructors
        public Candidate() { }
        public Candidate(string name, string class, string photo, string description, string nickname, int total)
        {
            this._name=name;
            this._class=class;
            this._photo=photo;
            this._description=description;
            this._nickname=nickname;
            this._total=total;
        }
        #endregion
        #region Public Properties
        public virtual int Cid
        {
            get {return _cid;}
            set {_cid=value;}
        }
        public virtual string Name
        {
            get {return _name;}
            set {_name=value;}
        }
        public virtual string Class
        {
            get {return _class;}
            set {_class=value;}
        }
        public virtual string Photo
        {
            get {return _photo;}
            set {_photo=value;}
        }
        public virtual string Description
        {
            get {return _description;}
            set {_description=value;}
        }
        public virtual string Nickname
        {
            get {return _nickname;}
            set {_nickname=value;}
        }
        public virtual int Total
        {
            get {return _total;}
            set {_total=value;}
        }
        #endregion
    }
    #endregion
}